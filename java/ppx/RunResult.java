// automatically generated by the FlatBuffers compiler, do not modify

package ppx;

import java.nio.*;
import java.lang.*;
import java.util.*;
import com.google.flatbuffers.*;

@SuppressWarnings("unused")
public final class RunResult extends Table {
  public static RunResult getRootAsRunResult(ByteBuffer _bb) { return getRootAsRunResult(_bb, new RunResult()); }
  public static RunResult getRootAsRunResult(ByteBuffer _bb, RunResult obj) { _bb.order(ByteOrder.LITTLE_ENDIAN); return (obj.__assign(_bb.getInt(_bb.position()) + _bb.position(), _bb)); }
  public void __init(int _i, ByteBuffer _bb) { bb_pos = _i; bb = _bb; }
  public RunResult __assign(int _i, ByteBuffer _bb) { __init(_i, _bb); return this; }

  public Tensor result() { return result(new Tensor()); }
  public Tensor result(Tensor obj) { int o = __offset(4); return o != 0 ? obj.__assign(__indirect(o + bb_pos), bb) : null; }

  public static int createRunResult(FlatBufferBuilder builder,
      int resultOffset) {
    builder.startObject(1);
    RunResult.addResult(builder, resultOffset);
    return RunResult.endRunResult(builder);
  }

  public static void startRunResult(FlatBufferBuilder builder) { builder.startObject(1); }
  public static void addResult(FlatBufferBuilder builder, int resultOffset) { builder.addOffset(0, resultOffset, 0); }
  public static int endRunResult(FlatBufferBuilder builder) {
    int o = builder.endObject();
    return o;
  }
}

